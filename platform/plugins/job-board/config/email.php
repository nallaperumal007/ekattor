<?php

return [
    'name' => 'plugins/job-board::job-board.emails.title',
    'description' => 'plugins/job-board::job-board.emails.description',
    'templates' => [
        'admin-new-job-application' => [
            'title' => 'plugins/job-board::job-board.emails.templates.admin_new_job_application_title',
            'description' => 'plugins/job-board::job-board.emails.templates.admin_new_job_application_description',
            'subject' => 'New job application',
            'can_off' => true,
            'variables' => [
                'job_application_name' => 'Name',
                'job_application_position' => 'Position',
                'job_application_email' => 'Email',
                'job_application_phone' => 'Phone',
                'job_application_summary' => 'Summary',
                'job_application_resume' => 'Resume',
                'job_application_cover_letter' => 'Cover Letter',
                'job_application' => 'Job application',
            ],
        ],
        'employer-new-job-application' => [
            'title' => 'plugins/job-board::job-board.emails.templates.employer_new_job_application_title',
            'description' => 'plugins/job-board::job-board.emails.templates.employer_new_job_application_description',
            'subject' => 'New job application',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'job_application_name' => 'Name',
                'job_application_position' => 'Position',
                'job_application_email' => 'Email',
                'job_application_phone' => 'Phone',
                'job_application_summary' => 'Summary',
                'job_application_resume' => 'Resume',
                'job_application_cover_letter' => 'Cover Letter',
                'job_application' => 'Job application',
            ],
        ],
        'new-job-posted' => [
            'title' => 'New job posted',
            'description' => 'Send email to admin when a new job posted',
            'subject' => 'New job is posted on {{ site_title }} by {{ job_author }}',
            'can_off' => true,
            'variables' => [
                'job_name' => 'Job name',
                'job_url' => 'Job URL',
                'job_author' => 'Job author',
            ],
        ],
        'new-company-profile-created' => [
            'title' => 'New company profile created',
            'description' => 'Send email to admin when a employer create a new company profile',
            'subject' => 'New company profile is created on {{ site_title }} by {{ employer_name }}',
            'can_off' => true,
            'variables' => [
                'company_name' => 'Company name',
                'company_url' => 'Company URL',
                'employer_name' => 'Employer name',
            ],
        ],
        'job-expired-soon' => [
            'title' => 'Job expired soon',
            'description' => 'Send email to the author if their job will be expired in next 3 days',
            'subject' => 'Your job "{{ job_name }}" will be expired in {{ job_expired_after }} days',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'job_name' => 'Job name',
                'job_url' => 'Job URL',
                'job_author' => 'Job author',
                'job_list' => 'Job list URL',
                'job_expired_after' => 'Job expired after x days',
            ],
        ],
        'job-renewed' => [
            'title' => 'Job renewed',
            'description' => 'Send email to the author when their job renewed',
            'subject' => 'Your job "{{ job_name }}" has been renewed automatically',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'job_name' => 'Job name',
                'job_url' => 'Job URL',
                'job_author' => 'Job author',
            ],
        ],
        'payment-receipt' => [
            'title' => 'Payment receipt',
            'description' => 'Send a notification to user when they buy credits',
            'subject' => 'Payment receipt for package {{ package_name }} on {{ site_title }}',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'account_name' => 'Account name',
                'account_email' => 'Account email',
                'package_name' => 'Name of package',
                'package_price' => 'Price',
                'package_percent_discount' => 'Percent discount',
                'package_number_of_listings' => 'Number of listings',
                'package_price_per_credit' => 'Price per credit',
            ],
        ],
        'account-registered' => [
            'title' => 'Account registered',
            'description' => 'Send a notification to admin when a new employer/job seeker registered',
            'subject' => 'New {{ account_type }} registered on {{ site_title }}',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'account_type' => 'Account type (employer/job seeker)',
                'account_name' => 'Account name',
                'account_email' => 'Account email',
            ],
        ],
        'confirm-email' => [
            'title' => 'Confirm email',
            'description' => 'Send email to user when they register an account to verify their email',
            'subject' => 'Confirm Email Notification',
            'can_off' => false,
            'variables' => [
                'verify_link' => 'Verify email link',
            ],
        ],
        'password-reminder' => [
            'title' => 'Reset password',
            'description' => 'Send email to user when requesting reset password',
            'subject' => 'Reset Password',
            'can_off' => false,
            'variables' => [
                'reset_link' => 'Reset password link',
            ],
        ],
        'free-credit-claimed' => [
            'title' => 'Free credit claimed',
            'description' => 'Send a notification to admin when free credit is claimed',
            'subject' => '{{ account_name }} has claimed free credit on {{ site_title }}',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'account_name' => 'Account name',
                'account_email' => 'Account email',
            ],
        ],
        'payment-received' => [
            'title' => 'Payment received',
            'description' => 'Send a notification to admin when someone buy credits',
            'subject' => 'Payment received from {{ account_name }} on {{ site_title }}',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'package_name' => 'Name of package',
                'package_price' => 'Price',
                'account_name' => 'Account name',
                'account_email' => 'Account email',
            ],
        ],
        'invoice-payment-created' => [
            'title' => 'Invoice Payment Detail',
            'description' => 'Send a notification to the customer who makes the job posting payment',
            'subject' => 'Payment received from {{ account_name }} on {{ site_title }}',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'account_name' => 'Account name',
                'invoice_code' => 'Invoice Code',
                'invoice_link' => 'Invoice Link',
            ],
        ],
        'job-seeker-job-alert' => [
            'title' => 'New job posted',
            'description' => 'Send email to job seeker when a new job posted',
            'subject' => 'Hiring {{ job_name }} at {{ company_name }}',
            'can_off' => true,
            'variables' => [
                'job_name' => 'Job name',
                'job_url' => 'Job URL',
                'company_name' => 'Company Name',
                'account_name' => 'Account Name',
            ],
        ],
    ],
];
