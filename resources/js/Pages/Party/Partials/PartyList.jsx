// import DangerButton from '@/Components/DangerButton';
// import Modal from '@/Components/Modal';

export default function PartyList({ characters }) {

    const characterList = characters.map(character => 
        <li key={character.created_at} className="font-serif p-4 shadow-md rounded bg-white rounded-md mb-4">
            <span className="text-2xl mr-1">{character?.name}</span> the {character?.ancestry} {character?.character_class}, previously {character?.background?.toLowerCase()}
        </li>
    );
    
    return(
        <div>
            <h1 className="text-2xl mx-auto text-center mb-4 font-serif">Welcome, brave adventurers!</h1>
            <ul className="character-list bg-parchment px-12">
                {characterList}
                {(characterList?.length ? 
                    <li className="font-serif px-4 pb-4">
                        and...
                    </li>
                    : <li className="font-serif px-4 pb-4 text-center">You're the first!</li>
                )}
            </ul>
        </div>
    )
}