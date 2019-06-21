/* 
Modaal object moet:
De volgende properties hebben:
	Achtergrond
	Modaal met daarin:
	Sluitknop
	Inhoud uit de DOM voor modaal ( Class; modaalContent)
	Knoppen uit de DOM ( Class ; modaal-knop)
en de volgende methods:
	achtergrond maken
	sluitknop maken
	modaal maken
	openen modaal
	sluiten modaal
*/

const modaalVenster = {
	alleInhoud: document.querySelectorAll('.modaalContent'),
	alleKnoppen: document.querySelectorAll('.modaal-knop'),

	maakAchtergrond() {
		let achtergrond = document.createElement('div');
		achtergrond.classList.add('modaal-achtergrond')
		achtergrond.addEventListener('click', () => this.sluiten());
		return achtergrond;
	},
	maakModaal(){
		let modaal = document.createElement('div');
		modaal.addEventListener('click', (evt) => evt.stopPropagation());
		modaal.className = 'modaal';
		return modaal;

	},
	maakSluitKnop(){
		let sluitknop = document.createElement('div');
		sluitknop.className = 'sluit-knop';
		sluitknop.innerHTML = '&#x00D7';
		sluitknop.addEventListener('click', () => this.sluiten());
		return sluitknop;
	},
	open(elem){
		this.achtergrond = this.maakAchtergrond();
		this.sluitKnop  = this.maakSluitKnop();
		this.modaal 	 = this.maakModaal();

		this.modaal.appendChild(this.sluitKnop)
		this.modaal.appendChild(elem);
		this.achtergrond.appendChild(this.modaal);
		document.body.appendChild(this.achtergrond);
	},
	sluiten(){
		this.modaal.innerHTML = '';
		document.body.removeChild(this.achtergrond);

	}
}
// initieren: inhoud verwijderen
for (let i= 0; i<modaalVenster.alleInhoud.length; i++) {
	modaalVenster.alleInhoud[i].parentNode.removeChild(modaalVenster.alleInhoud[i]);
}
for (let i=0; i<modaalVenster.alleKnoppen.length; i++) {
	modaalVenster.alleKnoppen[i].addEventListener('click', () => {
		let inhoud = modaalVenster.alleInhoud[i];
		modaalVenster.open(inhoud);
	})
}