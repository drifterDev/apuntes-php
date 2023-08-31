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
            <tr class="border-y-2 border-black">
              <td class="border-r-2 border-black p-2">${data.titulo}</td>
              <td class="border-r-2 border-black p-2">${data.autor}</td>
              <td class="border-r-2 border-black p-2">${data.genero}</td>
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
      messages.children[1].innerHTML = "Libros cargados";
      messages.classList.toggle("bg-green-100");
    })
    .catch(function (error) {
      console.log(error);
    });
}

load.addEventListener("click", function () {
  if (!cargo) {
    messages.children[1].innerHTML = "Cargando libros...";
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
  messages.classList.toggle("bg-green-100");
  messages.children[1].innerHTML = "Guardando libro...";
  axios
    .post(url, JSON.stringify(newBook), {
      headers: {
        "Content-Type": "application/json",
      },
    })
    .then(function (response) {
      console.log("Respuesta del servidor:", response.data);
      addBook(newBook);
      messages.children[1].innerHTML = "Libro guardado";
      messages.classList.toggle("bg-green-100");
    })
    .catch(function (error) {
      console.error("Error al realizar la solicitud:", error);
    });
});
