<html> 
<title> Implementando accordion! </title>
<head>
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #868;
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

</style> 
</head> 
<body>
	
	<h2> Teste de Accordion! </h2>
	<p> Projeto feito para entender como implementar accordion em um site </p> 
	
	<button class="accordion"> Contando de 1 a 10</button>
	<div class="panel"> <p> <?php
		for ( $i = 0 ; $i < 10 ; $i++ ) {
			print( "Linha numero " . $i . "<br />");
		} 
	?>
	 </p>
		</div> 
	  <button class="accordion"> Lorem ipsum </button>
	<div class="panel">
	<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius odio eu justo ultricies tincidunt. Proin auctor, sapien vel suscipit ultrices, tellus justo pharetra elit, vitae vehicula massa ligula at tellus. Mauris ipsum metus, posuere non pharetra non, accumsan quis est. Integer id sem nec mi lacinia tempor. Praesent tristique purus urna, vitae mollis metus consequat luctus. Etiam pharetra faucibus viverra. Vestibulum suscipit eros vel mi hendrerit, vel venenatis sapien hendrerit. Nulla at odio id dolor fermentum imperdiet vitae vitae lectus. Ut cursus cursus ornare. Phasellus ullamcorper sodales dolor, non pellentesque velit pharetra ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed vitae elementum dolor. Aliquam vitae leo erat. Morbi consectetur turpis vitae nibh congue ultrices. </p>
	</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>
</html> 