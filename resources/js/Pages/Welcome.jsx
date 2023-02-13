import { Link, Head } from '@inertiajs/react';

export default function Welcome(props) {
    return (
        <>
            <Head title="Join the Party!" />
            <div className="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                <div className="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div className="flex flex-col rounded justify-center pt-8 bg-gray-100 p-8">
                        <h1 className="text-3xl text-center mb-8">Welcome to the Pen & Paper RPG!</h1>
                        <h2 className="text-center">I'm thrilled to have you here to play with us!</h2>
                        <p>Why not <Link className="text-cyan-700 transition-colors" href="/party">check out the party and tell us about your character?</Link></p>
                    </div>
                </div>
            </div>
        </>
    );
}
