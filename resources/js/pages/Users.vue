<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import UsersTabel from '../components/UsersTable.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: '/usere',
    },
];
</script>

<template>
    <Head title="Users" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            
            <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 dark:border-sidebar-border md:min-h-min">
                <UsersTabel />
            </div>
        </div>
    </AppLayout>
</template>
