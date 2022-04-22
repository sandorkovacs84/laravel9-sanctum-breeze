<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeButton from '@/Components/Button.vue';
import BreezeNavLink from '@/Components/NavLink.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';

defineProps({

})

const form = useForm({
    email: 'sandor@sandorkovacs.ro',
    password: 'Aa123456',
});

const submit = () => {
    form.post('/spa/login');
}

</script>

<template>
    <BreezeGuestLayout>

        <Head title="SPA" />

        <h1 class="text-3xl">SPA</h1>

        <div  v-if="$page.props.auth.user">
            <h2>Welcome, {{ $page.props.auth.user.name }}</h2>
            <BreezeNavLink :href="route('spa.logout')" method="post" as="button">
                Log Out
            </BreezeNavLink>
        </div>
        <div v-else>
            <form @submit.prevent="submit">

                <div class="mt-4">
                    <BreezeLabel>email</BreezeLabel>
                    <BreezeInput type="text" v-model="form.email"  class="mt-1 block w-full" />
                </div>

                <div class="mt-4">
                    <BreezeLabel>password</BreezeLabel>
                    <BreezeInput type="text" v-model="form.password"   class="mt-1 block w-full" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Log in
                    </BreezeButton>
                </div>
                
            </form>
        </div>
            
        </BreezeGuestLayout>

</template>
