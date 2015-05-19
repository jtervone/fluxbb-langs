<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'fi',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Virheellinen pyyntö. Linkki on joko väärä tai vanhentunut..',
'No view'							=>	'Sinulla ei ole oikeuksia lukea näitä alueita.',
'No permission'						=>	'Sinulla ei ole oikeuksia tälle sivulle.',
'Bad referrer'						=>	'Bad HTTP_REFERER. You were referred to this page from an unauthorized source. If the problem persists please make sure that \'Base URL\' is correctly set in Admin/Options and that you are visiting the forum by navigating to that URL. More information regarding the referrer check can be found in the FluxBB documentation.',
'No cookie'							=>	'Olet kirjautunut onnistuneesti, mutta evästettä ei olla pystytty asettamaan. Tarkista selaimesi asetukset ja salli evästeet tälle sivustolle.',
'Pun include extension'  			=>	'Unable to process user include %s from template %s. "%s" files are not allowed',
'Pun include directory'				=>	'Unable to process user include %s from template %s. Directory traversal is not allowed',
'Pun include error'					=>	'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory',

// Miscellaneous
'Announcement'						=>	'Ilmoitus',
'Options'							=>	'Asetukset',
'Submit'							=>	'Tallenna', // "Name" of submit buttons
'Ban message'						=>	'Sinulta on estetty pääsy tälle alueelle.',
'Ban message 2'						=>	'Esto loppuu',
'Ban message 3'						=>	'Ylläpitäjä, joka on estänyt pääsysi on jättänyt seuraavan viestin:',
'Ban message 4'						=>	'Lähetä kaikki tiedustelut alueen ylläpitäjälle',
'Never'								=>	'Ei koskaan',
'Today'								=>	'Tänään',
'Yesterday'							=>	'Eilen',
'Info'								=>	'Tietoja', // A common table header
'Go back'							=>	'Takaisin',
'Maintenance'						=>	'Ylläpito',
'Redirecting'						=>	'Uudelleenohjataan',
'Click redirect'					=>	'Klikkaa tästä, jos et halua odottaa (tai selain ei siirry automaattisesti seuraavalle sivulle)',
'on'								=>	'päällä', // As in "BBCode is on"
'off'								=>	'pois päältä',
'Invalid email'						=>	'Antamasi sähköpostiosoite ei ole oikeaa muotoa.',
'Required'							=>	'(Pakollinen)',
'required field'					=>	'on pakolinen kenttä tässä lomakkeessa.', // For javascript form validation
'Last post'							=>	'Viimeisin viesti',
'by'								=>	'kirjoittanut', // As in last post by some user
'New posts'							=>	'Uudet viestit', // The link that leads to the first new post
'New posts info'					=>	'Siirry uusimpaan viestiin tässä aiheessa.', // The popup text for new posts links
'Username'							=>	'Käyttäjätunnus',
'Password'							=>	'Salasana',
'Email'								=>	'Sähköposti',
'Send email'						=>	'Lähetä sähköposti',
'Moderated by'						=>	'Moderoinut',
'Registered'						=>	'Rekisteröitynyt',
'Subject'							=>	'Otsikko',
'Message'							=>	'Viesti',
'Topic'								=>	'Aihe',
'Forum'								=>	'Alue',
'Posts'								=>	'Viestit',
'Replies'							=>	'Vastaukset',
'Pages'								=>	'Sivut:',
'Page'								=>	'Sivu %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] -tagi:',
'img tag'							=>	'[img] -tagi:',
'Smilies'							=>	'Hymiöt:',
'and'								=>	'ja',
'Image link'						=>	'kuva', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'kirjoitti:', // For [quote]'s
'Mailer'							=>	'%s postittaja', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Tärkeää tietoa',
'Write message legend'				=>	'Kirjoita viestisi ja lähetä',
'Previous'							=>	'Edellinen',
'Next'								=>	'Seuraava',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Otsikko',
'Member'							=>	'Jäsen', // Default title
'Moderator'							=>	'Moderaattori',
'Administrator'						=>	'Ylläpitäjä',
'Banned'							=>	'Bannattu',
'Guest'								=>	'Vieras',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] löydettiin ilman avaavaa [%1$s] tagia',
'BBCode error invalid nesting'		=>	'[%1$s] on avattu [%2$s] sisässä. Tämä ei ole sallittua',
'BBCode error invalid self-nesting'	=>	'[%s] on avattu itsensä sisällä. Tämä ei ole sallittua',
'BBCode error no closing tag'		=>	'[%1$s] löydettiin ilman sulkevaa [/%1$s] tagia',
'BBCode error empty attribute'		=>	'[%s] tagilla ei ole attribuutteja',
'BBCode error tag not allowed'		=>	'Sinulla ei ole oikeuksia käyttää [%s] tagia',
'BBCode error tag url not allowed'	=>	'Sinulla ei ole oikeuksia käyttää linkkejä viesteissä',
'BBCode list size error'			=>	'Kirjoittamasi lista on liian pitkä. Yritä tiivistää listaa, kiitos!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Pääsivu',
'User list'							=>	'Käyttäjälista',
'Rules'								=>	'Säännöt',
'Search'							=>	'Haku',
'Register'							=>	'Rekisteröidy',
'Login'								=>	'Kirjaudu',
'Not logged in'						=>	'Et ole kirjautuneena.',
'Profile'							=>	'Profiili',
'Logout'							=>	'Ulos',
'Logged in as'						=>	'Kirjautunut tunnuksella',
'Admin'								=>	'Ylläpito',
'Last visit'						=>	'Viimeinen käynti: %s',
'Topic searches'					=>	'Aiheet:',
'New posts header'					=>	'Uudet',
'Active topics'						=>	'Aktiiviset',
'Unanswered topics'					=>	'Vastaamattomat',
'Posted topics'						=>	'Kirjoitettu',
'Show new posts'					=>	'Näytä uudet viestit viime käyntisi jälkeen.',
'Show active topics'				=>	'Näytä aktiiviset aiheet.',
'Show unanswered topics'			=>	'Näytä aiheet, joissa ei ole vastauksia.',
'Show posted topics'				=>	'Näytä aiheet, joihin olet kirjoittanut.',
'Mark all as read'					=>	'Merkitse kaikki aiheet luetuiksi',
'Mark forum read'					=>	'Merkitse kaikki viestit luetuiksi',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Keskustelualueen alatunniste',
'Jump to'							=>	'Siirry',
'Go'								=>	' Siirry ', // Submit button in forum jump
'Moderate topic'					=>	'Moderoi aihetta',
'All'								=>	'Kaikki',
'Move topic'						=>	'Siirrä aihe',
'Open topic'						=>	'Avaa aihe',
'Close topic'						=>	'Sulje aihe',
'Unstick topic'						=>	'Poista nosto',
'Stick topic'						=>	'Nosta aihe',
'Moderate forum'					=>	'Moderoi aluetta',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Debug-tietoa',
'Querytime'							=>	'Generoitu %1$s sekunnissa, %2$s tietokantapyyntöä tehty',
'Memory usage'						=>	'Muistinkäyttö: %1$s',
'Peak usage'						=>	'(Piikki: %1$s)',
'Query times'						=>	'Ajat (s)',
'Query'								=>	'Tietokantapyyntö',
'Total query time'					=>	'Pyyntöjen aika yhteensä: %s',

// For extern.php RSS feed
'RSS description'					=>	'Viimeisimmät aiheet alueella %s.',
'RSS description topic'				=>	'Viimeisimmät viestit aiheessa %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS-syöte aktiivisista aiheista',
'Atom active topics feed'			=>	'Atom-syöte aktiivisista aiheista',
'RSS forum feed'					=>	'RSS-syöte',
'Atom forum feed'					=>	'Atom-syöte',
'RSS topic feed'					=>	'RSS-syöte aiheista',
'Atom topic feed'					=>	'Atom-syöte aiheista',

// Admin related stuff in the header
'New reports'						=>	'Täällä on uusia raportoituja viestejä',
'Maintenance mode enabled'			=>	'Ylläpitotila on laitettu päälle!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

// [begin] New Private Messaging System

'PM' => 'YV',
'PMsend' => 'Lähetä uusi yksityisviesti',
'PMnew' => 'Uusi yksityisviesti',
'PMmess' => 'Sinulla on uusia yksityisviestejä (%s kpl).',
'Show' => 'Näytä',

// [end] New Private Messaging System

);
