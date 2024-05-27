function validateForm() {
    let nom = document.forms["myForm"]["nom"].value;
    if (nom == "") {
      alert("Le nom doit etre remplis");
      return false;
    }
    let prenom = document.forms["myForm"]["prenom"].value;
    if (prenom == "") {
      alert("Le prenom doit etre remplis");
      return false;
    }
  }