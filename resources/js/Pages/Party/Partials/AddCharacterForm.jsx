// import { useRef, useState } from 'react';
// import DangerButton from '@/Components/DangerButton';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
// import Modal from '@/Components/Modal';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { useForm, usePage } from '@inertiajs/react';
import Select from 'react-select';

export class SelectOption {
    label;
    value;
}

export default function AddCharacterForm({}) {

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

    const submit = () => {

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
        <form onSubmit={submit}>
                <div>
                    <InputLabel forInput="name" value="Name" />

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

                <div>
                    <InputLabel forInput="ancestry" value="Ancestry" />

                    <Select
                        options={transformOptions(usePage().props.ancestries)}
                        id="ancestry"
                        name="ancestry"
                        onChange={onSelectChange}
                        required>
                    </Select>
                </div>

                <div>
                    <InputLabel forInput="background" value="Background" />

                    <Select
                        options={transformOptions(usePage().props.backgrounds)}
                        id="background"
                        name="background"
                        onChange={onSelectChange}
                        required>
                    </Select>
                </div>

                <div>
                    <InputLabel forInput="character_class" value="Class" />

                    <Select
                        options={transformOptions(usePage().props.characterClasses)}
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