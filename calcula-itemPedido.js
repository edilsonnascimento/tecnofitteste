var preco = document.querySelector("#idPreco");
var quantidade = document.querySelector("#idQuantidade");
var valor = document.querySelector("#idValor");

console.log(quantidade.value);
console.log(preco.textContent);


quantidade.addEventListener("input", function(){    
        
        valor.value = preco.textContent * quantidade.value;
     
});