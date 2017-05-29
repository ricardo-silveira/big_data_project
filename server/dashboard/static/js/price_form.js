function yesnoCheckDuracao() {
    if (document.getElementById('duracao_dia').checked) {
        document.getElementById("selecao_duracao_dia").style.display = "block";
        document.getElementById("selecao_duracao_semana").style.display = "none";		
        document.getElementById("selecao_duracao_mes").style.display = "none";				
    } else if (document.getElementById('duracao_semana').checked){
        document.getElementById("selecao_duracao_dia").style.display = "none";
        document.getElementById("selecao_duracao_semana").style.display = "block";
        document.getElementById("selecao_duracao_mes").style.display = "none";		
    } else if (document.getElementById('duracao_mes').checked){
        document.getElementById("selecao_duracao_dia").style.display = "none";
        document.getElementById("selecao_duracao_semana").style.display = "none";
        document.getElementById("selecao_duracao_mes").style.display = "block";		
    }	
}

function yesnoCheckRegiao() {
    if (document.getElementById('selecao_raio').checked) {
        document.getElementById("regiao_raio").style.display = "block";
        document.getElementById("regiao_zona").style.display = "none";
        document.getElementById("bairro_zona_sul").style.display = "none";
        document.getElementById("bairro_zona_central").style.display = "none";
        document.getElementById("bairro_zona_norte").style.display = "none";		
    } else if (document.getElementById('selecao_bairro').checked){
        document.getElementById("regiao_raio").style.display = "none";
        document.getElementById("regiao_zona").style.display = "block";
        document.getElementById("bairro_zona_sul").style.display = "none";
        document.getElementById("bairro_zona_central").style.display = "none";		
        document.getElementById("bairro_zona_norte").style.display = "none";		
    }	
}

function getOptionZona() {
    if (document.getElementById('zona_sul').selected) {
        document.getElementById("bairro_zona_sul").style.display = "block";
        document.getElementById("bairro_zona_central").style.display = "none";
        document.getElementById("bairro_zona_norte").style.display = "none";
        document.getElementById("regiao_raio").style.display = "none";
        document.getElementById("regiao_zona").style.display = "none";
    } else if (document.getElementById('zona_central').selected){
        document.getElementById("bairro_zona_sul").style.display = "none";
        document.getElementById("bairro_zona_central").style.display = "block";		
		document.getElementById("regiao_raio").style.display = "none";
        document.getElementById("regiao_zona").style.display = "none";
    } else if (document.getElementById('zona_norte').selected){
        document.getElementById("bairro_zona_sul").style.display = "none";
        document.getElementById("bairro_zona_central").style.display = "none";		
        document.getElementById("bairro_zona_norte").style.display = "block";				
		document.getElementById("regiao_raio").style.display = "none";
        document.getElementById("regiao_zona").style.display = "none";		
    }	
}

function ShowMapZonaSul() {
    if (document.getElementById("bairro_sul1").selected) {
        document.getElementById("mapa_bairro_sul1").style.display = "block";
        document.getElementById("mapa_bairro_sul2").style.display = "none";
        document.getElementById("mapa_bairro_sul3").style.display = "none";		
	} else if (document.getElementById("bairro_sul2").selected) {
        document.getElementById("mapa_bairro_sul1").style.display = "none";		
		document.getElementById("mapa_bairro_sul2").style.display = "block";
        document.getElementById("mapa_bairro_sul3").style.display = "none";				
	} else if (document.getElementById("bairro_sul3").selected) {
        document.getElementById("mapa_bairro_sul1").style.display = "none";		
		document.getElementById("mapa_bairro_sul2").style.display = "none";
        document.getElementById("mapa_bairro_sul3").style.display = "block";				
	}	
}
