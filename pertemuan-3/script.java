function cekNilai(){

    let nim = document.getElementById("nim").value;
    let nilai = document.getElementById("nilai").value;
    let hasil = document.getElementById("hasil");

    nilai = Number(nilai);

    if(nilai < 0 || nilai > 100 || isNaN(nilai)){
        hasil.innerHTML = "Nilai tidak valid!";
        return;
    }

    let huruf;

    if(nilai >= 80 && nilai <= 100){
        huruf = "A";
    }
    else if(nilai >= 70){
        huruf = "B";
    }
    else if(nilai >= 60){
        huruf = "C";
    }
    else if(nilai >= 50){
        huruf = "D";
    }
    else{
        huruf = "E";
    }

    hasil.innerHTML = "NIM: " + nim + "<br>" + "Nilai: " + nilai + "<br>" + "Huruf Mutu: " + huruf;
}
