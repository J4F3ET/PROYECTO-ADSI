document.querySelectorAll("#list_sings_servicios_1>div").forEach(el => {
    el.addEventListener("click", e => {
      const id = e.target.getAttribute("id");
      console.log("Se ha clickeado el id "+id);
    });
  });
