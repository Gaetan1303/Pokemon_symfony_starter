<?php

namespace App\Tests\Entity;

use App\Entity\Pokedex;
use PHPUnit\Framework\TestCase;

class PokedexTest extends TestCase
{

    /**
     * Teste le setter et le getter de l'identifiant.
     */
    public function testSetAndGetId(): void
    {
        $pokedex = new Pokedex();
        $pokedex->setId(42);
        $this->assertSame(42, $pokedex->getId());
    }


    /**
     * Teste le setter et le getter du nom du pokémon.
     */
    public function testSetAndGetName(): void
    {
        $pokedex = new Pokedex();
        $pokedex->setName('Pikachu');
        $this->assertSame('Pikachu', $pokedex->getName());
    }

    /**
     * Teste le setter et le getter de l'URL de l'image du pokémon.
     */
    public function testSetAndGetImageURL(): void
    {
        $pokedex = new Pokedex();
        $pokedex->setImageURL('https://img.pokemons.com/pikachu.png');
        $this->assertSame('https://img.pokemons.com/pikachu.png', $pokedex->getImageURL());
    }
}
