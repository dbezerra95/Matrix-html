var hotel = {
    nome: 'Acaulpo',
    quartos: 40,
    reservados: 25,
    academia: true,
    checkDisponibilidade: function () {
        return this.quartos - this.reservados
    }
}

var nomeHotel = document.getElementById('nomeHotel')
nomeHotel.textContent = hotel.nome

var quarto = document.getElementById('quarto')
quarto.textContent = hotel.quartos

var reservados = document.getElementById('reservados')
reservados.textContent = hotel.reservados

/* function/ metodo deve terminar com () */
var disponiveis = document.getElementById('disponiveis')
disponiveis.textContent = hotel.checkDisponibilidade()

var disponiveis = document.getElementById('disponiveis')
disponiveis.textContent = 'Disponibilidade: ' + hotel.checkDisponibilidade() + ' quartos vagos';

console.log("Academia" + hotel)

hotel.academia = false

console.log("Academia" + hotel.academia)

hotel.piscina = true

console.log(hotel)

delete hotel.piscina