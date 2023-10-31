<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class faqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faqs = [
            [
                'question' => 'Read necessary information before visits',
                'answer' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
            ],
            [
                'question' => 'Automatic SMS reminders',
                'answer' => 'Receive timely reminders via SMS, ensuring you never miss an appointment. Our automated system keeps you informed and on track with your healthcare schedule.',
            ],
            [
                'question' => 'A unique link for each patient',
                'answer' => 'For personalized convenience, we provide a unique link to access your specific patient information. This ensures a secure and tailored experience for every individual we serve.',
            ],
            [
                'question' => 'Informing you about new possibilities',
                'answer' => 'Stay updated on the latest advancements and options available. We believe in keeping you informed about new opportunities and treatments that could benefit your health and well-being.',
            ],
        ];

        foreach ($faqs as $faq) {
            $faq_store = new Faq;
            $faq_store->question = $faq['question'];
            $faq_store->answer = $faq['answer'];
            $faq_store->save();
        }
    }
}
