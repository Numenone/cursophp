<?php

interface Crud {
	public function create($data);
	public function read();
	public function update();
	public function delete();
}

class Noticias implements Crud {

	public function create($data) {
		//pipipipopopo logica
	}

	public function read() {
		//pipiririrpipoopo logica para ler noticia
	}

	public function update() {
		//logica para atualizar noticia
	}

	public function delete() {
		//logica para deletar noticia
	}
}