"use strict";

const load = document.getElementById("loadBooks");
const save = document.getElementById("bookSave");
const messages = document.getElementById("messages");
const titulo = document.getElementById("bookTitle");
const autor = document.getElementById("bookAuthorId");
const genero = document.getElementById("authorGenreId");
const body = document.querySelector("tbody");
const url = "http://localhost:8001/books";
let cargo = false;
let template = "";

function addBook(data) {
  template += `
            <tr>
              <td>${data.titulo}</td>
              <td>${data.autor}</td>
              <td>${data.genero}</td>
            </tr>
            `;
  body.innerHTML = template;
}

function loadBooks() {
  axios
    .get(url)
    .then(function (res) {
      let data = res.data;
      for (let d in data) {
        addBook(data[d]);
      }
      messages.children[0].innerHTML = "Libros cargados";
    })
    .catch(function (error) {
      console.log(error);
    });
}

load.addEventListener("click", function () {
  if (!cargo) {
    messages.children[0].innerHTML = "Cargando libros...";
    messages.classList.toggle("hidden");
    messages.classList.toggle("block");
    loadBooks();
    cargo = true;
  }
});

save.addEventListener("click", () => {
  var newBook = {
    titulo: titulo.value,
    autor: autor.value,
    genero: genero.value,
  };
  messages.children[0].innerHTML = "Guardando libro...";
  axios
    .post(url, JSON.stringify(newBook), {
      headers: {
        "Content-Type": "application/json",
      },
    })
    .then(function (response) {
      console.log("Respuesta del servidor:", response.data);
      addBook(newBook);
      messages.children[0].innerHTML = "Libro guardado";
    })
    .catch(function (error) {
      console.error("Error al realizar la solicitud:", error);
    });
});
