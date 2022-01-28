<form action="{{url('/nota')}}" method="POST" role="form" >
        @csrf
        <legend class="text-center">NOTAS</legend>
    
        <div class="form-group">
            <label for="">Nombre:</label>
            <input 
                name="nombre" 
                id="nombre"
                type="text" 
                required="required"
                pattern="^[a-zA-Z\s]{2,255}"
            >
        </div>     
         <div class="form-group">
            <label for="">Parcial 1:</label>
            <input name="parcial1" 
                 id="parcial1"
                type="number" 
                step="0.1" 
                oninput="promedio()" 
                required="required"
                min=1
                max=5
            >
        </div>
        <div class="form-group">
            <label for="">Parcial 2:</label>
            <input name="parcial2" 
                id="parcial2" 
                type="number" 
                step="0.1" 
                oninput="promedio()" 
                required="required"
                min=1
                max=5
            >
        </div>
        <div class="form-group">
            <label for="">Parcial 3:</label>
            <input name="parcial3" 
            id="parcial3"
            type="number" 
            step="0.1"
            oninput="promedio()"
            required="required"
            min=1
            max=5
            >
        </div>
        <div class="form-group">
            <label for="">Nota Final:</label>
                <input  
                name="final" 
                id="final"
                type="text"
                value="1.0"
                >
        </div>

        <div class="form-group text-center btnGuardar">
         	<button type="submit" class="btn btn-success">Guardar</button>
        </div>

    </form>

    <script type="text/javascript">
	    function promedio() {
	        var parcial1=parseFloat(document.getElementById("parcial1").value)||0,
	            parcial2=parseFloat(document.getElementById("parcial2").value)||0,
	            parcial3=parseFloat(document.getElementById("parcial3").value)||0;

	        document.getElementById("final").value=((parcial1+parcial2+parcial3)/3).toFixed(1);
	    }
    </script>