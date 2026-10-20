document.addEventListener( 'DOMContentLoaded', function () {
	var toggleBtn = document.querySelector( '.site-menu-toggle' );
	var menu = document.querySelector( '.site-menu' );
	var backdrop = document.querySelector( '.site-menu-backdrop' );
	var closeBtn = document.querySelector( '.site-menu-close' );

	if ( ! toggleBtn || ! menu || ! backdrop || ! closeBtn ) {
		return;
	}

	function openMenu() {
		menu.classList.add( 'is-open' );
		backdrop.classList.add( 'is-open' );
		document.body.classList.add( 'site-menu-locked' );
		menu.setAttribute( 'aria-hidden', 'false' );
		toggleBtn.setAttribute( 'aria-expanded', 'true' );
	}

	function closeMenu() {
		menu.classList.remove( 'is-open' );
		backdrop.classList.remove( 'is-open' );
		document.body.classList.remove( 'site-menu-locked' );
		menu.setAttribute( 'aria-hidden', 'true' );
		toggleBtn.setAttribute( 'aria-expanded', 'false' );
	}

	toggleBtn.addEventListener( 'click', function ( event ) {
		event.preventDefault();
		if ( menu.classList.contains( 'is-open' ) ) {
			closeMenu();
		} else {
			openMenu();
		}
	} );

	closeBtn.addEventListener( 'click', closeMenu );
	backdrop.addEventListener( 'click', closeMenu );

	document.addEventListener( 'keydown', function ( event ) {
		if ( event.key === 'Escape' ) {
			closeMenu();
		}
	} );
} );
