import { Link } from '@inertiajs/react';
import React from 'react';

export default function Home() {
  return (
    <div>
        helooo

        <Link href="{route('posts.index')}">Liste des Postes</Link>
    </div>
  );
}
