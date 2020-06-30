import Layout from '@/layout';

const tableRoutes = {
  path: '/table',
  component: Layout,
  redirect: '/table/complex-table',
  name: 'Complex Table',
  meta: {
    title: 'OCSS Data',
    icon: 'table',
    permissions: ['view menu table'],
  },
  children: [
    {
      path: 'msg-table',
      component: () => import('@/views/table/MessagesTable'),
      name: 'MessagesTable',
      meta: { title: 'messagesTable' },
    },
    {
      path: 'payments-table',
      component: () => import('@/views/table/PaymentsTable'),
      name: 'ComplexTable',
      meta: { title: 'paymentsTable' },
    },
    {
      path: 'students-table',
      component: () => import('@/views/table/StudentsTable'),
      name: 'StudentTable',
      meta: { title: 'studentTable' },
    },
  ],
};
export default tableRoutes;
