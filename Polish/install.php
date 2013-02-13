<?php

// Language definitions used in install.php, localized by adaur
$lang_install = array(

'Install message'				=>	'Plik <strong>config.php</strong> nie istnieje na serwerze lub jest uszkodzony. Może to oznaczać, że FluxBB nie został jeszcze zainstalowany.',
'Choose install language'		=>	'Język skryptu instalacyjnego',
'Choose install language info'	=>	'Język wykorzystywany w tym skrypcie instalacyjnym. Domyślny język dla całego forum można ustawić niżej.',
'Install language'				=>	'Wybierz język instalacyjny',
'Change language'				=>	'Zmień język',
'Next'							=>	'Dalej',
'Already installed'				=>	'Wygląda na to, że FluxBB jest już zainstalowany. Przejdź do <a href="index.php">strony głównej</a>.',
'You are running error'			=>	'Na serwerze uruchomiony jest %1$s w wersji %2$s. FluxBB %3$s wymaga co najmniej %1$s %4$s , aby działać poprawnie. Należy zaktualizować %1$s , aby kontynuować instalację.',
'My FluxBB Forum'				=>	'Moje forum FluxBB',
'Description'					=>	'Niestety, nikt nie powie Ci czym jest FluxBB - musisz go poznać sam!',
'Username 1'					=>	'Nazwa użytkownika musi mieć co najmniej 2 znaki.',
'Username 2'					=>	'Nazwa użytkownika nie może być dłuższa niż 25 znaków.',
'Username 3'					=>	'Gość (Guest) jest zarezerwowaną nazwą użytkownika.',
'Username 4'					=>	'Nazwa użytkownika nie może być postaci adresu IP.',
'Username 5'					=>	'Nazwa użytkownika nie może zawierać wszystkich znaków \', " i [ lub ] na raz.',
'Username 6'					=>	'Nazwa użytkownika nie może zawierać tagów BBCode.',
'Short password'				=>	'Hasło musi mieć co najmniej 4 znaki.',
'Passwords not match'			=>	'Wprowadzone hasła nie zgadzają się.',
'Wrong email'					=>	'Adres e-mail Administratora nie jest poprawny.',
'No board title'				=>	'Musisz wprowadzić tytuł forum.',
'Error default language'		=>	'Wybrany język domyślny nie istnieje.',
'Error default style'			=>	'Wybrany styl domyślny nie istnieje.',
'No DB extensions'				=>	'Środowisko PHP zainstalowane na serwerze nie wspiera baz danych, które wykorzystuje FluxBB. PHP powinien wspierać bazy danych MySQL, PostgreSQL lub SQLite, aby FluxBB został zainstalowany.',
'Administrator username'		=>	'Nazwa Administratora',
'Administrator password 1'		=>	'Hasło Administratora 1',
'Administrator password 2'		=>	'Hasło Administratora 2',
'Administrator email'			=>	'E-mail Administratora',
'Board title'					=>	'Tytuł forum',
'Base URL'						=>	'Adres URL',
'Required field'				=>	'jest polem wymaganym.',
'FluxBB Installation'			=>	'Instalacja FluxBB',
'Welcome'						=>	'Masz zamiar zainstalować FluxBB. W celu instalacji FluxBB należy wypełnić poprawnie poniższy formularz. W razie jakichkolwiek problemów podczas instalacji, należy zapoznać się z dokumentacją.',
'Install'						=>	'Instalacja FluxBB %s',
'Errors'						=>	'Poniższe błędy powinny zostać poprawione:',
'Database setup'				=>	'Ustawienia bazy danych',
'Info 1'						=>	'Proszę podać wymagane informacje w celu konfiguracji bazy danych dla FluxBB. Musisz znać wszystkie wymagane informacje przed przystąpieniem do instalacji.',
'Select database'				=>	'Wybierz typ bazy danych',
'Info 2'						=>	'FluxBB aktualnie wspiera bazy danych typu MySQL, PostgreSQL oraz SQLite. Jeśli Twojego typu bazy danych nie ma na poniższej liście rozwijalnej, oznacza to, że środowisko PHP zainstalowane na serwerze nie wspiera tego typu bazy. Więcej informacji na temat wsparcia dla poszczególnych wersji baz danych można znaleźć w FAQ.',
'Dual MySQL'					=>	'FluxBB wykrył, że środowisko PHP na serwerze wspiera dwa różne rodzaje połączeń z bazą danych MySQL. Te dwie opcje nazwane są odpowiednio - Standard i Improved. Jeśli nie wiesz, którą wersję wybrać, wypróbuj najpierw Improved, a w razie problemów z połączeniem, spróbuj jeszcze raz wykorzystując wersję Standard.',
'InnoDB'						=>	'FluxBB wykrył, że serwer MySQL może wspierać <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>. Jest to dobry wybór, jeżeli planujesz uruchomienie bardzo dużego forum. Jeśli nie masz pewności, najlepiej nie wykorzystywać InnoDB.',
'Database type'					=>	'Typ bazy danych',
'Required'						=>	'(Wymagane)',
'Database hostname'				=>	'Wprowadź adres serwera bazy danych',
'Info 3'						=>	'Adres serwera bazy danych (przykład: localhost, db.myhost.com lub 192.168.0.15). Można sprecyzować niestandardowy port do łączenia z serwerem, jeżeli baza danych nie jest uruchomiona na standardowym porcie (przykład: localhost:3580). Dla SQLite wpisz cokolwiek lub pozostaw w polu \'localhost\'.',
'Database server hostname'		=>	'Adres serwera bazy danych',
'Database enter name'			=>	'Wprowadź nazwę bazy danych',
'Info 4'						=>	'Nazwa bazy danych, w której zostanie zainstalowany FluxBB. Podana baza danych musi istnieć na serwerze. Dla SQLite pole to oznacza nazwę pliku tej bazy. Ze względów bezpieczeństwa, zalecane jest, aby dostęp do tej bazy był prywatny (brak dostępu przez www). Jeżeli plik z bazą danych SQLite nie istnieje, FluxBB będzie próbował go utworzyć.',
'Database name'					=>	'Nazwa bazy danych',
'Database enter informations'	=>	'Wprowadź nazwę użytkownika i hasło bazy danych',
'Database username'				=>	'Nazwa użytkownika bazy danych',
'Info 5'						=>	'Wprowdź nazwę użytkownika i hasło, aby połączyć się z bazą danych. Zignoruj to dla SQLite.',
'Database password'				=>	'Hasło bazy danych',
'Database enter prefix'			=>	'Wprowadź prefiks dla tabel',
'Info 6'						=>	'Jeśli chcesz, możesz określić prefiks dla tabel w bazie danych. W ten sposób możesz zainstalować kilka kopii FluxBB w tej samej bazie danych (przykład: flux_).',
'Table prefix'					=>	'Prefiks tabel',
'Administration setup'			=>	'Ustawienia administracyjne',
'Info 7'						=>	'Proszę podać wymagane informacje w celu konfiguracji ustawień administracyjnych forum.',
'Admin enter username'			=>	'Wprowadź nazwę użytkownika dla Administratora',
'Info 8'						=>	'Nazwa dla administratora forum. W późniejszym czasie można utworzyć więcej administratorów i moderatorów. Nazwa musi się składać z 2-25 znaków.',
'Admin enter password'			=>	'Wprowadź i potwierdź hasło dla Administratora',
'Info 9'						=>	'Hasło musi mieć co najmniej 4 znaki. Wielkość znaków ma znaczenie.',
'Password'						=>	'Hasło',
'Confirm password'				=>	'Potwierdź hasło',
'Admin enter email'				=>	'Wprowadź adres e-mail Administratora',
'Info 10'						=>	'Adres e-mail Administratora forum',
'Board setup'					=>	'Ustawienia forum',
'Info 11'						=>	'Proszę wprowadzić wymagane informacje w celu konfiguracji forum FluxBB.',
'Enter board title'				=>	'Wprowadź tytuł forum',
'Info 12'						=>	'Tytuł forum (wyświetlany w nagłówku każdej strony).',
'Enter board description'		=>	'Wprowadź opis forum',
'Info 13'						=>	'Krótki opis forum (wyświetlany w nagłówku strony). To pole może zawierać kod HTML.',
'Board description'				=>	'Opis forum',
'Enter base URL'				=>	'Wprowadź adres URL, pod którym będzie zainstalowany FluxBB',
'Info 14'						=>	'Adres URL (bez kończącego slash\'a) do forum (przykład: http://forum.myhost.com lub http://myhost.com/~myuser). Adres <strong>musi</strong> być poprawny, w przeciwnynm razie administratorzy i moderatorzy nie będą mogli dokonywać zmian ustawień i przesyłać formularzy. Poniższa wartość jest tylko propozycją skryptu FluxBB.',
'Choose the default language'	=>	'Wybierz domyślny język forum',
'Info 15'						=>	'Domyślny język dla gości oraz użytkowników, którzy nie dokonają zmiany w ustawieniach swojego profilu.',
'Default language'				=>	'Domyślny język',
'Choose the default style'		=>	'Wybierz domyślny styl forum',
'Info 16'						=>	'Domyślny styl dla gości oraz użytkowników, którzy nie dokonają zmiany w ustawieniach swojego profilu.',
'Default style'					=>	'Domyślny styl',
'Start install'					=>	'Rozpocznij instalację',
'DB type not valid'				=>	'\'%s\' nie jest poprawnym typem bazy danych',
'Table prefix error'			=>	'Podany prefiks \'%s\' zawiera niepoprawne znaki lub jest za długi. Prefiks może zawierać litery a-z, cyfry i znak podkreślenia, nie możę rozpoczynać się cyfrą. Maksymalna długość prefiksu to 40 znaków. Wybierz inny prefiks.',
'Prefix reserved'				=>	'Prefiks \'sqlite_\' jest zarezerwowany dla silnika SQLite. Wybierz inny prefiks.',
'Existing table error'			=>	'Tabela \'%susers\' już istnieje w bazie \'%s\'. Może to oznaczać, że FluxBB jest już zainstalowany lub inne oprogramowanie zainstalowane w bazie wykorzystuje nazwy tabel, których wymaga FluxBB. Jeśli instalujesz wiele kopii FluxBB w jednej bazie, musisz wykorzystywać różne prefiksy dla różnych kopii FluxBB.',
'InnoDB off'					=>	'Usługa InnoDB nie jest uruchomiona na serwerze. Wybierz inny typ bazy danych, który nie wykorzystuje InnoDB, bądź uruchom tę usługę na serwerze MySQL.',
'Administrators'				=>	'Administratorzy',
'Administrator'					=>	'Administrator',
'Moderators'					=>	'Moderatorzy',
'Moderator'						=>	'Moderator',
'Guests'						=>	'Goście',
'Guest'							=>	'Gość',
'Members'						=>	'Użytkownicy',
'Announcement'					=>	'Wprowadź ogłoszenie',
'Rules'							=>	'Wprowadź zasady forum',
'Maintenance message'			=>	'Forum jest aktualnie w trybie konserwacji. Odczekaj kilka minut, a następnie spróbuj ponownie.',
'Test post'						=>	'Wątek testowy',
'Message'						=>	'Jeśli widzisz tę wiadomość (a prawdopodobnie tak właśnie jest), oznacza to, że FluxBB został zainstalowany i działa poprawnie. Teraz zaloguj się i przejdź do Panelu Administracyjnego, aby skonfigurować forum.',
'Test category'					=>	'Kategoria testowa',
'Test forum'					=>	'Forum testowe',
'This is just a test forum'		=>	'To jest testowe forum',
'Alert cache'					=>	'<strong>Katalog cache nie jest obecnie zapisywalny!</strong> W celu poprawnej funkcjonalności FluxBB, katalog <em>%s</em> musi być zapisywalny przez PHP. Użyj komendy chmod, aby ustawić odpowiednie uprawnienia dla tego katalogu. Jeśli nie jesteś pewny, użyj chmod 0777.',
'Alert avatar'					=>	'<strong>Katalog avatar nie jest obecnie zapisywalny!</strong> Jeśli chcesz, aby użytkownicy mieli możliwość wgrywania swoich własnych avatarów, katalog <em>%s</em> musi być zapisywalny przez PHP. Później możesz zmienić miejsce zapisu wgrywanych avatarów - przejdź do Panel Administracyjny/Opcje. Użyj komendy chmod, aby ustawić odpowiednie uprawnienia dla tego katalogu. Jeśli nie jesteś pewny, użyj chmod 0777.',
'Alert upload'					=>	'<strong>Wysyłanie plików wydaje się być wyłączone na serwerze!</strong> Jeśli chcesz, aby użytkownicy mogli wgrywać swoje własne avatary, musisz włączyć funkcję file_uploads w konfiguracji ustawień PHP. Jeśli upload plików jest właczony, wgrywanie avatarów można włączyć w Panelu Administracyjnym/Opcje/Ustawienia avatarów.',
'FluxBB has been installed'		=>	'FluxBB został pomyślnie zainstalowany! Aby w pełni ukończyć instalację, wykonaj następujące czynności:',
'Final instructions'			=>	'Instrukcje końcowe',
'Info 17'						=>	'W celu zakończenia instalacji, kliknij przycisk poniżej i pobierz plik config.php. Następnie wgraj ten plik do katalogu głównego FluxBB na serwerze.',
'Info 18'						=>	'Plik config.php został przesłany poprawnie na serwer, FluxBB został w pełni zainstalowany! W tym momencie możesz przejść do <a href="index.php">strony głównej forum</a>.',
'Download config.php file'		=>	'Pobierz plik config.php',
'FluxBB fully installed'		=>	'FluxBB został pomyślnie zainstalowany! Możesz teraz przejść do <a href="index.php">strony głównej forum</a>.',

);
