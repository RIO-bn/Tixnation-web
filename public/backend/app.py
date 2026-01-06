import pickle
import streamlit as st 
import requests
import os

API_KEY = "79fdfceb61840a82016b2fa88a85f227"


file_path = os.path.join(os.path.dirname(__file__), "movies_list.pkl")

# Cek apakah file ada sebelum dibuka
if os.path.exists(file_path):
    with open(file_path, 'rb') as file:
        movies = pickle.load(file)
    movies_list = movies['title'].values
    st.write("Data berhasil dimuat!")
else:
    st.error("File movies_list.pkl tidak ditemukan! Periksa kembali lokasi file.")
    
    # Pastikan file ada di folder yang sama
file_path = os.path.join(os.path.dirname(__file__), "similarity.pkl")

# Cek apakah file ada sebelum dibuka
if os.path.exists(file_path):
    with open(file_path, 'rb') as file:
        similarity = pickle.load(file)
    print("Data similarity.pkl berhasil dimuat!")
else:
    print("File similarity.pkl tidak ditemukan! Periksa kembali lokasi file.")

movies_list=movies['title'].values
st.header("Movie Reccomendation From Us")
selectValue = st.selectbox("select Movie From Here",movies_list)

def fetch_poster(movie_name):
    url = f"https://api.themoviedb.org/3/search/movie?api_key={API_KEY}&query={movie_name}"
    response = requests.get(url)
    data = response.json()
    
    if data["results"]:
        poster_path = data["results"][0]["poster_path"]
        return f"https://image.tmdb.org/t/p/w500{poster_path}"
    else:
        return None  # Jika poster tidak ditemukan


def recommend(selected_movie):
    # Find the movie index
    index = movies[movies['title'] == selected_movie].index

    if len(index) == 0:  # If movie not found
        return ["Movie not found"]

    index = index[0]

    # Sort movies based on similarity score
    distances = sorted(list(enumerate(similarity[index])), reverse=True, key=lambda x: x[1])

    recommended_movies = []
    for i in distances[1:6]:  # Top 10 excluding itself
        recommended_movies.append(movies.iloc[i[0]].title)

    return recommended_movies

if st.button("Show Recommended"):
    recommended_movies = recommend(selectValue)

    if not recommended_movies:
        st.warning("Tidak ada rekomendasi ditemukan.")
    else:
        col1, col2, col3, col4, col5 = st.columns(5)
        columns = [col1, col2, col3, col4, col5]

        for col, movie in zip(columns, recommended_movies):
            poster_url = fetch_poster(movie)  # Ambil poster untuk setiap film
            with col:
                if poster_url:
                    st.image(poster_url, caption=movie, use_container_width=True)
                else:
                    st.warning("Poster tidak ditemukan!")
                st.text(movie)  # Menampilkan nama film di bawah poster