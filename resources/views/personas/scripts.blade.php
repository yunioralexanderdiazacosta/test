<script>
        function personasPorCargo()
	    {
			axios.get('/api/grafico')
			.then(res => {
				console.log("esta es la respuesta =>",res)
		       /*
				new Chart(document.getElementById("chartjs-4"),{"type":"doughnut","data":{"labels":["Red","Blue","Yellow"],"datasets":[{"label":"My First Dataset","data":[300,50,100],"backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]}]}});
				*/
			})
			console.log(err => {
				console.log(err)
			})
	    }
</script>