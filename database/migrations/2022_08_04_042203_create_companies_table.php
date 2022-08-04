<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('business_name',50)->nullable();
            $table->text('website')->nullable();
            $table->string('date_format', 50)->nullable();
            $table->string('zone_name', 50)->nullable();
            $table->string('currency', 50)->nullable();
            $table->string('currency_position', 100)->nullable();
            $table->string('precision', 10)->nullable();
            $table->tinyInteger('default_customer')->unsigned()->nullable(); //DEFAULT 1, [need to clarify]
            $table->tinyInteger('default_waiter')->unsigned()->nullable();
            $table->tinyInteger('default_payment')->unsigned()->nullable();
            $table->text('payment_settings')->nullable();
            $table->string('address', 100)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('invoice_footer',500)->nullable();
            $table->string('print_format_invoice',500)->nullable();
            $table->string('pre_or_post_payment', 500)->nullable();
            $table->string('sms_setting_check', 20)->nullable();
            $table->text('invoice_logo')->nullable();
            $table->tinyInteger('company_id')->nullable();
            $table->string('collect_tax', 50)->nullable();
            $table->string('tax_title', 100)->nullable();
            $table->string('tax_registration_no', 100)->nullable();
            $table->string('tax_is_gst', 50)->nullable();
            $table->string('state_code', 50)->nullable();
            $table->text('tax_setting')->nullable();
            $table->string('tax_string', 250)->nullable();
            $table->tinyInteger('outlet_qty')->nullable();
            $table->tinyInteger('sms_enable_status')->nullable();
            $table->text('sms_details')->nullable();
            $table->string('custom_label', 200)->nullable();
            $table->text('custom_url')->nullable();
            $table->tinyInteger('smtp_enable_status')->nullable();
            $table->text('smtp_details')->nullable();
            $table->string('whatsapp_share_number', 20)->nullable();
            $table->string('language_manifesto', 20)->nullable();
            $table->text('white_label')->nullable();
            $table->string('company_id_xml', 250)->nullable();
            $table->string('tax_registration_number', 250)->nullable();
            $table->string('tax_accounting_basis', 250)->nullable();
            $table->timestamp('created_date')->nullable(); //  DEFAULT current_timestamp()
            $table->tinyInteger('plan_id')->nullable();
            $table->float('monthly_cost')->nullable();
            $table->string('number_of_maximum_users', 10)->nullable();
            $table->string('number_of_maximum_outlets', 10)->nullable();
            $table->string('number_of_maximum_invoices', 10)->nullable();
            $table->string('access_day', 10)->nullable();
            $table->string('payment_clear', 20)->nullable();
            $table->string('is_block_all_user', 10)->nullable();
            $table->text('customer_reviewers')->nullable();
            $table->text('counter_details')->nullable();
            $table->text('social_link_details')->nullable();
            $table->text('email_settings')->nullable();
            $table->string('export_daily_sale', 20)->nullable();
            $table->string('printing_invoice', 30)->nullable();
            $table->tinyInteger('receipt_printer_invoice')->nullable();
            $table->string('printing_bill', 100)->nullable();
            $table->string('receipt_printer_bill', 100)->nullable();
            $table->string('print_format_bill', 100)->nullable();
            $table->string('printing_kot', 100)->nullable();
            $table->string('receipt_printer_kot', 100)->nullable();
            $table->string('print_format_kot', 100)->nullable();
            $table->string('printing_bot', 100)->nullable();
            $table->string('receipt_printer_bot', 100)->nullable();
            $table->string('print_format_bot', 100)->nullable();
            $table->string('print_server_url_invoice', 100)->nullable();
            $table->string('print_server_url_bill', 100)->nullable();
            $table->string('languge_manifesto', 50)->nullable();
            $table->string('print_server_url_kot', 100)->nullable();
            $table->string('print_server_url_bot', 100)->nullable();
            $table->string('service_type', 20)->nullable();
            $table->string('service_amount', 20)->nullable();
            $table->string('active_code', 20)->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->tinyInteger('del_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
