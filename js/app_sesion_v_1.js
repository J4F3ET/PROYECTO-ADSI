// Obtener referencia al input y a la imagen

const $imagen_1 = document.querySelector("#imagen_1"),
  $imagen_1_pre = document.querySelector("#imagen_1_pre");
const $imagen_2 = document.querySelector("#imagen_2"),
  $imagen_2_pre = document.querySelector("#imagen_2_pre");
$imagen_1.addEventListener("change", () => {
  const archivos_1 = $imagen_1.files;
  if (!archivos_1 || !archivos_1.length) {
    $imagen_1_pre.src = "";
    return;
  }
  const primerArchivo = archivos_1[0];
  const objectURL = URL.createObjectURL(primerArchivo);
  $imagen_1_pre.src = objectURL;
});
$imagen_2.addEventListener("change", () => {
    const archivos_2 = $imagen_2.files;
    if (!archivos_2 || !archivos_2.length) {
      $imagen_2_pre.src = "";
      return;
    }
    const segundoArchivo = archivos_2[0];
    const objectURL = URL.createObjectURL(segundoArchivo);
    $imagen_2_pre.src = objectURL;
});