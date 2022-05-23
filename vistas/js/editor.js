// Obtener referencia al input y a la imagen
const $imgNoticiaSubir1 = document.querySelector("#imgNoticiaSubir1");
  $imgNoticiaSubir1_pre = document.querySelector("#imgNoticiaSubir1_pre");
const $imgNoticiaSubir2 = document.querySelector("#imgNoticiaSubir2");
  $imgNoticiaSubir2_pre = document.querySelector("#imgNoticiaSubir2_pre");
$imgNoticiaSubir1.addEventListener("change", () => {
  const archivos_1 = $imgNoticiaSubir1.files;
  if (!archivos_1 || !archivos_1.length) {
    $imgNoticiaSubir1_pre.src = "";
    return;
  }
  const primerArchivo = archivos_1[0];
  const objectURL = URL.createObjectURL(primerArchivo);
  $imgNoticiaSubir1_pre.src = objectURL;
  label1=document.querySelector("#labelImgNoticias1");
    label1.remove();
});
$imgNoticiaSubir2.addEventListener("change", () => {
    const archivos_2 = $imgNoticiaSubir2.files;
    if (!archivos_2 || !archivos_2.length) {
      $imgNoticiaSubir2_pre.src = "";
      return;
    }
    const segundoArchivo = archivos_2[0];
    const objectURL = URL.createObjectURL(segundoArchivo);
    $imgNoticiaSubir2_pre.src = objectURL;
    label2=document.querySelector("#labelImgNoticias2");
    label2.remove();
});