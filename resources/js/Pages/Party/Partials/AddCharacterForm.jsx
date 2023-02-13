// import DangerButton from '@/Components/DangerButton';
// import Modal from '@/Components/Modal';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { useForm, usePage } from '@inertiajs/react';
import Select from 'react-select';

export class SelectOption {
    label;
    value;
}

export default function AddCharacterForm({ ancestries, backgrounds, characterClasses }) {

    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        ancestry: '',
        background: '',
        character_class: '',
    });

    const transformOptions = (options) => {
        return options.map(option => {
            return { value: option.name, label: option.name };
        })
    }

    // const [value, setValue] = useState<readonly SelectOption>

    const submit = (e) => {
        e.preventDefault();

        post(route('party'));
    }

    const onHandleChange = (event) => {
        setData(event.target.name, event.target.value);
        console.log(data);
    };

    const onSelectChange = (newValue, actionMeta) => {
        console.log(newValue);
        console.log(actionMeta);
        setData(actionMeta.name, newValue.value);
    }

    return(
        <form className="rounded shadow-md p-8 bg-white" onSubmit={submit}>
            <h3>Tell us about your character!</h3>

            <div className="mt-4">
                <InputLabel forInput="name" value="My character's name is" />

                <TextInput
                    id="name"
                    name="name"
                    value={data.name}
                    className="mt-1 block w-full"
                    autoComplete="name"
                    isFocused={true}
                    handleChange={onHandleChange}
                    required
                />

                <InputError message={errors.name} className="mt-2" />
            </div>

            <div className="mt-4">
                <InputLabel forInput="ancestry" value="My character is a" />

                <Select
                    options={transformOptions(ancestries)}
                    id="ancestry"
                    name="ancestry"
                    onChange={onSelectChange}
                    required>
                </Select>
            </div>

            <div className="mt-4">
                <InputLabel forInput="background" value="Before my character became an adventurer, they were a" />

                <Select
                    options={transformOptions(backgrounds)}
                    id="background"
                    name="background"
                    onChange={onSelectChange}
                    required>
                </Select>
            </div>

            <div className="mt-4">
                <InputLabel forInput="character_class" value="My character has developed their skills as a" />

                <Select
                    options={transformOptions(characterClasses)}
                    id="character_class"
                    name="character_class"
                    onChange={onSelectChange}
                    required>
                </Select>
            </div>

            <div className="flex items-center justify-end mt-4">
                <PrimaryButton className="ml-4" processing={processing}>
                    Add Character
                </PrimaryButton>
            </div>
        </form>
    )
}