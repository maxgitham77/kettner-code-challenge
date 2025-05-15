[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-2e0aaae1b6195c2367325f4f02e2d04e9abb55f0b24a779b69b11b9e10269abc.svg)](https://classroom.github.com/online_ide?assignment_repo_id=19543949&assignment_repo_type=AssignmentRepo)
<p align="center"><a href="https://kettner-edelmetalle.de" target="_blank"><img src="https://www.kettner-edelmetalle.de/img/layout/logo.svg" width="400"></a></p>


# Kettner Laravel Assessment Test (Deutsche Version)

Mit diesem kurzen Laravel Assessment Test möchten wir herausfinden wie gut deine Laravel Skills sind und wie wir Dich als Bewerber bei Kettner Edelmetalle einsetzen können. Dabei schauen wir uns an, wie _elegant_ Du einzelne Bausteine löst als auch in welchem Zeitrahmen Du Sachen umsetzen kannst. 

**Bitte beachte, dass ab Erstellung des Repos bis zum finalen Commit maximal 90 Minuten vergehen dürfen.**

## Zum Ablauf deines Tests
Weiter unten findest Du eine Liste mit nummerierten Aufgaben. Arbeite diese Tasks bitte der Reihe nach ab und erstelle für jede abgeschlossene Aufgabe einen eigenen Commit. Diese Commits pusht Du am Ende bitte in den _main_ Branch. Sende uns eine kurze Info, wenn du den Assesment Test abgeschlossen hast. 

Bitte beachte, dass die Aufgaben absichtlich Spielraum für eigene Entscheidungen und Interpretationen lassen. In der Regel gibt es jedoch immer einen best practice im Sinne der Laravel Dokumentation. 

## Deine Aufgaben
1) Erstelle Dir eine lokale Entwicklungsumgebung auf der Du das Projekt zum Laufen bringst. Für diesen Test geht es nicht darum die perfekte Lösung zu bauen, sondern einen pragmatischen Ansatz zu wählen der einen schnell zum Ziel bringt. Dokumentiere später im PR weshalb Du Dich für welche Lösung entschieden hast.
2) Errichte unter der URL `/application` ein simples Formular mit den folgenden Feldern:
   1) Vorname | String | Pflichtfeld
   2) Nachname | String | Pflichtfeld
   3) E-Mail | E-Mail | Pflichtfeld
   4) Telefon | Phone | Optional
   5) Deine Bewerbung | Textarea | Pflichtfeld (mindestens 30 Wörter)
3) Optionale Bonusaufgabe: Installiere Tailwind auf der Laravel Instanz und mach das Formular ein wenig hübsch (muss kein Kunstwerk werden)
4) Programmiere eine POST Route, die die Daten aus deinem Formular annimmt und in einer Datenbank speichert. Denke dabei bitte an möglichst viele Laravel Standards wie Migration, Model, Controller, Validation, ORM usw. Leite den Besucher nach dem Speichern auf eine Dankesseite weiter.
5) Lass jeden Tag um 18:00 Uhr deutscher Zeit einen Cronjob laufen, der einem Admin (n.kahlmeier@kettner-edelmetalle.de) alle neuen Bewerber per E-Mail zusammengefasst zuschickt. Denk dabei an einen möglichst performanten Weg dies zu tun. 
6) Baue unter `/api/application/*` drei API Routen zum Hinzufügen neuer Bewerbungen (selbe Felder wie Formular), auflisten der Vor- und Nachnamen aller Bewerbungen (optional mit Pagination) und dem Anzeigen eines einzelnen kompletten Bewerber-Datensatzes.
7) Fertig!

---

# Kettner Laravel Assessment Test (English Version)

With this short Laravel Assessment Test, we want to find out how good your Laravel skills are and how we can use you as an applicant at Kettner Edelmetalle. We will look at how _elegantly_ you solve individual components as well as the timeframe in which you can implement things.

**Please note that from the creation of the repo to the final commit, a maximum of 90 minutes may elapse.**

## About your test procedure
Further down you will find a list with numbered tasks. Please work through these tasks in order and create a separate commit for each completed task. At the end, please push these commits to the _main_ branch. Send us a short info when you have completed the assessment test.

Please note that the tasks intentionally leave room for your own decisions and interpretations. However, there is usually always a best practice in the sense of the Laravel documentation.

## Your tasks
1) Create a local development environment where you can get the project up and running. This test is not about building the perfect solution, but choosing a pragmatic approach that quickly achieves the goal. Document later in the PR why you chose which solution.
2) Set up a simple form under the URL `/application` with the following fields:
   1) First name | String | Mandatory field
   2) Last name | String | Mandatory field
   3) E-Mail | E-Mail | Mandatory field
   4) Phone | Phone | Optional
   5) Your application | Textarea | Mandatory field (at least 30 words)
3) Optional bonus task: Install Tailwind on the Laravel instance and make the form a little pretty (doesn't have to be a work of art)
4) Program a POST route that accepts the data from your form and saves it in a database. Please think of as many Laravel standards as possible such as Migration, Model, Controller, Validation, ORM etc. After saving, redirect the visitor to a thank you page.
5) Every day at 6:00 PM German time, run a cron job that sends an email to an admin (n.kahlmeier@kettner-edelmetalle.de) summarizing all new applicants. Think of the most efficient way to do this.
6) Under `/api/application/*` build three API routes to add new applications (same fields as form), list the first and last names of all applications (optional with pagination) and display a single complete applicant data set.
7) Finished!
