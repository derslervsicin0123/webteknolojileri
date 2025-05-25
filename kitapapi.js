function kitapAra() {
  const kitapAdi = document.getElementById("kitapAdi").value.trim();
  const sonucDiv = document.getElementById("sonuc");
  sonucDiv.innerHTML = "";

  if (kitapAdi === "") {
    sonucDiv.innerHTML = "<p>Lütfen bir kitap adı giriniz.</p>";
    return;
  }

  fetch(`https://openlibrary.org/search.json?q=${encodeURIComponent(kitapAdi)}`)
    .then(res => res.json())
    .then(data => {
      if (data.docs.length === 0) {
        sonucDiv.innerHTML = "<p>Sonuç bulunamadı.</p>";
        return;
      }

      const kitap = data.docs[0];
      const kapakId = kitap.cover_i;
      const kapakURL = kapakId
        ? `https://covers.openlibrary.org/b/id/${kapakId}-M.jpg`
        : "https://via.placeholder.com/150x220?text=No+Image";

      sonucDiv.innerHTML = `
        <h2>${kitap.title}</h2>
        <p><strong>Yazar:</strong> ${kitap.author_name ? kitap.author_name.join(", ") : "Bilinmiyor"}</p>
        <img src="${kapakURL}" alt="Kapak Görseli">
      `;
    })
    .catch(err => {
      sonucDiv.innerHTML = "<p>Bir hata oluştu.</p>";
      console.error(err);
    });
}