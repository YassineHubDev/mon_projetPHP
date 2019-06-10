<?php


namespace src\Utilities;


class Router
{
    /**
     * @var array
     */
    private $routes;

    /**
     * Ajoute un route au routeur
     * @param string $url - url à detecter
     * @param string $file - Template à appeler
     */
    public function addRoute(string $url, string $file): void
    {
        $this->routes[] = [
            'url' => $url,
            'template' => $file
        ];

    }

    /**
     * Vérifie l'url et renvoie l'éventuel fichier à appeler
     * @return string|null - retourne l'éventuel template à appeler
     */
    public function match(): ?string
    {
        $url = $_SERVER ['REQUEST_URI'];

        foreach ($this->routes as $route) {
            //Si la  route correspond à l'URL
            if ($route ['url'] === $url) {
                //On retourne le template à exectuer
                return $route ['template'];
            }
        }
        //Si aucune route n'a été trouvée, on retourne "null"
        return null;

    }
}














