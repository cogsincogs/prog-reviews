const contentEl = document.querySelector(".sections");

fetch('./albums.php')
    .then(response => {
        if (!response.ok) {
            throw new Error("Something went wrong");
        }
        return response.json();
    })
    .then(data => {
        let albumTitle = data[0].fldAlbum;
        let header = document.createElement("h1");
        header.append("Album Title: " + albumTitle);
        contentEl.appendChild(header);
    })