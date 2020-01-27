"use strict";

const profileForm = document.querySelector(".profile__form");
const editBtn = document.querySelector(".profile__edit-btn");
const passwordBtn = document.querySelector(".profile__password-btn");
const cancelBtn = document.querySelector(".profile__cancel-btn");

if (editBtn != null) {
    editBtn.addEventListener("click", () => {
        profileForm.classList.remove("hidden");
        passwordBtn.classList.remove("hidden");
        cancelBtn.classList.remove("hidden");
        editBtn.classList.add("hidden");
    });
}

if (cancelBtn != null) {
    cancelBtn.addEventListener("click", () => {
        profileForm.classList.add("hidden");
        passwordBtn.classList.add("hidden");
        cancelBtn.classList.add("hidden");
        editBtn.classList.remove("hidden");
    });
}
