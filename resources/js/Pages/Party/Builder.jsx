import { Head } from '@inertiajs/react';
import AddCharacterForm from './Partials/AddCharacterForm';
import PartyList from './Partials/PartyList';

export default function Builder({ ancestries, backgrounds, characters, characterClasses }) {
    
    return (
        <div className="bg-gray-100 dark:bg-gray-900 w-full h-full">
            <div className="bg-parchment max-w-3xl min-h-screen mx-auto shadow-lg px-12 pt-20">
                <Head title="Party Builder" />
                <PartyList
                    characters={characters}    
                ></PartyList>
                <AddCharacterForm
                    ancestries={ancestries}
                    backgrounds={backgrounds}
                    characterClasses={characterClasses}
                ></AddCharacterForm>
            </div>
        </div>
    );
}
 