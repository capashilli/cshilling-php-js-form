export default function AddCharacterForm({ characters }) {

    const transformCharacters = () => {
        return characters.map(character => 
            <li key={character.created_at}>{character.name} the {character.ancestry} {character.background} {character.character_class}</li>
        );
    }

    return(
        <ul>{transformCharacters()}</ul>
    )
}