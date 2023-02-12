import { Head } from '@inertiajs/react';
import AddCharacterForm from './Partials/AddCharacterForm';

export default function Builder({ ancestries, backgrounds, characters, characterClasses }) {
    
    return (
        <div className="">
            <Head title="Party Builder" />
            <AddCharacterForm>
                
            </AddCharacterForm>
        </div>
        
    );
}
 