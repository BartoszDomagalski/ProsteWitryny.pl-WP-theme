
// Load the script after the user scrolls, moves the mouse, or touches the screen
document.addEventListener('scroll', initGTMOnEvent);
document.addEventListener('mousemove', initGTMOnEvent);
document.addEventListener('touchstart', initGTMOnEvent);

// Or, load the script after 2 seconds
document.addEventListener('DOMContentLoaded', () => { setTimeout(initGTM, 2000); });

// Initializes Google Tag Manager in response to an event
function initGTMOnEvent (event) {
	initGTM();
	event.currentTarget.removeEventListener(event.type, initGTMOnEvent);
}

// Initializes Google Tag Manager
function initGTM () {
	if (window.gtmDidInit) {
	  // Don't load again
	  return false;
	}

	window.gtmDidInit = true;
	
	// Create the script
	const script = document.createElement('script');
	script.type = 'text/javascript';
	script.onload = () => { 
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){ dataLayer.push(arguments); }
	  gtag('js', new Date());
	  gtag('config', 'G-GB8K4GD27D');
	}
	script.src = 'https://www.googletagmanager.com/gtag/js?id=G-GB8K4GD27D';
	
	// We are still deferring the script
	script.defer = true;
	
	// Append the script to the body of the document
	document.getElementsByTagName('body')[0].appendChild(script);
}





{
  //Funkcja do sprawdzania czy użytkownik jest zalogowany, a następnie dodaje klase XXX do NAV, która zwiększy atrybuj TOP.

  // Pobierz element, któremu chcesz dodać klasę
  let element = document.getElementById("navv");

  if ( document.body.classList.contains( 'logged-in' ) ) {
    element.classList.add("topForLoggedIn");
  } else {
    element.classList.remove("topForLoggedIn");
  }

}

{
  //Funkcja która po scrollowaniu dodaje klasy do NAV
 
  // Pobierz element, któremu chcesz dodać klasę
  let element = document.getElementById("navv");
  // let logoLine = document.getElementById("logo-line");
  let logoSqr = document.getElementById("logo-square");
  let phoneIconTop = document.getElementById("scrolled-phone");
  // let mailIconTop = document.getElementById("scrolled-mail");
  
  // Ustaw wartość pozycji scroll down, przy której ma się zmienić klasa
  let scrollValue = 1;

  // Dodaj funkcję obsługi zdarzenia scroll
  window.addEventListener("scroll", function() {
    // Pobierz aktualną wartość pozycji scroll down
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Jeśli wartość scroll down jest większa lub równa ustalonej wartości, dodaj klasę do elementu
    if (scrollTop >= scrollValue) {
      // Dodaje klasy" do elementu
      element.classList.add("sticky");
      element.classList.add("navMinifie");

      logoSqr.classList.add("show-logo-sqr");
      // logoLine.classList.add("hide-top");
      phoneIconTop.classList.add("show-scrolled-icon");
      // mailIconTop.classList.add("show-scrolled-icon");
    } else {
      // Usuwa klasy z elementu
      element.classList.remove("sticky");
      element.classList.remove("navMinifie");

      logoSqr.classList.remove("show-logo-sqr");
      // logoLine.classList.remove("hide-top");
      phoneIconTop.classList.remove("show-scrolled-icon");
      // mailIconTop.classList.remove("show-scrolled-icon");
    }
  });

}
