# Cours sur l'AJAX (en utilisant l'API Fetch)

** AJAX ** ou Asynchronous Javascript And XML, n'est pas une technologie à proprement parler, mais plutôt une méthode qui consiste en un mélange de plusieurs technologies existantes.

C'est un terme qui a été inventé au départ pour être la nouvelle méthode de communication entre un serveur et le DOM du navigateur(Document Object Model : Il s'agit de la représentation de votre page XML/HTML sous la forme d'un document qui se divise en plusieurs objets.)

### Qu'est-ce que le DOM ?

Le DOM c'est la modélisation de votre page (généralement HTML), sous forme d'un ensemble d'objet.

Exemple
    Pour une page HTML type :
        <html>
            <body>
                <h1>Bonjour</h1>
            </body>
        </html>
    
    Votre DOM se présente (grossièrement, puisqu'il y a des spécifités) :
    window{
        document{
            html{
                body{
                    h1{
                        Bonjour
                    }
                }
            }
        }
    }

L'AJAX au même titre que le Javascript prévoyait de faire des opérations sur le DOM.

L'Ajax est de moins en moins un terme employé, puisque l'asynchrone est de plus en plus présent dans les langages navigateurs de nos jours.

### Asynchrone ?

JavaScript est un langage dit "synchrone" : Cela signifie que tout le code JS suit une queue d'évènements.

Donc si j'ai un code comme :

    - Crée une variable x = 50
    - Affiche x // 50
    - Multiplie x par 2
    - Affiche le résultat // 100

Asynchroniser une opération ce sera le casser de cette queue d'évènements.

    - Crée une variable x = 50
    - Attendre 3s
    - Affiche x // 50 -- async x = 100
    - Multiplie x par 2 // En asynchronisant cette chose
    - Affiche le résultat // 100

## A quoi ça sert l'AJAX ?

L'AJAX sert à récupérer des infos depuis le serveur APRES que le serveur ait déja renvoyé la page au client.

## Pourquoi on n'utilise plus AJAX comme terme ?

Parce que le Javascript d'aujourd'hui peut être plus facilement asynchronisé qu'avant. Aujourd'hui on aura plus tendance à dire "une requête asynchrone".

