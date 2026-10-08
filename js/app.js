function validarFormulario(form){
  const campos=[...form.querySelectorAll("input[required], select[required], textarea[required]")];
  for(const campo of campos){
    if(!campo.value.trim()){
      campo.focus();
      return "Preencha todos os campos obrigatórios.";
    }
  }
  return null;
}

async function enviarFormulario(event){
  event.preventDefault();
  const form=event.currentTarget;
  const resultado=form.querySelector(".resultado");
  const erro=validarFormulario(form);
  if(erro){resultado.className="resultado erro";resultado.textContent=erro;return;}
  const endpoint=form.dataset.endpoint;
  const dados=new FormData(form);
  try{
    const resposta=await fetch(endpoint,{method:"POST",body:dados});
    const json=await resposta.json();
    resultado.className="resultado "+(json.sucesso?"ok":"erro");
    resultado.textContent=json.mensagem;
    if(json.sucesso) form.reset();
  }catch(e){
    resultado.className="resultado erro";
    resultado.textContent="Não foi possível comunicar com o servidor PHP.";
  }
}

document.addEventListener("DOMContentLoaded",()=>{
  document.querySelectorAll("form[data-endpoint]").forEach(form=>{
    form.addEventListener("submit",enviarFormulario);
  });
});
