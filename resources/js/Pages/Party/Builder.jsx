import { Head } from '@inertiajs/react';
import AddCharacterForm from './Partials/AddCharacterForm';
import PartyList from './Partials/PartyList';

export default function Builder({ ancestries, backgrounds, characters, characterClasses }) {
    
    return (
        <div className="">
            <Head title="Party Builder" />
            <PartyList
                characters={characters}    
            >

            </PartyList>
            <AddCharacterForm
                ancestries={ancestries}
                backgrounds={backgrounds}
                characterClasses={characterClasses}
            >
                
            </AddCharacterForm>
        </div>
        
    );
}
 