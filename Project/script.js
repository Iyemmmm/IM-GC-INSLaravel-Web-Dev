var tanya = true;

while (tanya) {
    var p = prompt("Pilih: Gajah, Semut, atau Orang?").toLowerCase();  // Ubah input ke huruf kecil
    if (p === "gajah" || p === "semut" || p === "orang") {
        var comp = Math.random();

        if (comp < 0.33) {
            comp = "Semut";
        } else if (comp >= 0.33 && comp < 0.67) {
            comp = "Gajah";
        } else {
            comp = "Orang";
        }

        // Logika permainan dan pesan hasilnya

        tanya = confirm("Ingin bermain lagi?");
    } else {
        alert("Pilihan tidak valid. Silakan pilih Gajah, Semut, atau Orang.");
    }
}
