<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\CompanyCard;
use App\Models\Contact;
use App\Models\Credential;
use App\Models\Document;
use App\Models\Favoris;
use App\Models\Folder;
use App\Models\Message;
use App\Models\Note;
use App\Models\ResearchProfile;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-research', function (User $user, ResearchProfile $research) {
            return $user->id === $research->user_id;
        });

        Gate::define('manage-folder', function (User $user, Folder $folder) {
            return $user->id === $folder->user_id;
        });

        Gate::define('manage-follow', function (User $user, Favoris $follow) {
            return $user->id === $follow->user_id;
        });

        Gate::define('manage-document', function (User $user, Document $document) {
            return $document->user_id === $user->id || ($document->documentable_type === User::class &&  $user->id === $document->documentable_id);
        });

        Gate::define('manage-note', function (User $user, Note $note) {
            return  $user->id === $note->user_id;
        });

        Gate::define('manage-contact', function (User $user, User $contact) {
            return $user->id === $contact->parent_id;
        });

        Gate::define('manage-company', function (User $user, Company $company) {
            return $user->company_id === $company->id || $company->user->isBuyer();
        });

        Gate::define('manage-company-card', function (User $user, CompanyCard $card) {
            return $user->company_id === $card->company_id;
        });

        Gate::define('manage-credential', function (User $user, Credential $credential) {
            return $user->id === $credential->user_id;
        });

        Gate::define('manage-credential', function (User $user, Credential $credential) {
            return $user->id === $credential->user_id;
        });

        Gate::define('can-publish-company-page', function (User $user) {
            return $user->is_verify;
        });


        Gate::define('can-add-research', function (User $user) {
            $exist = ResearchProfile::where('user_id', $user->id)->exists();

            if ($exist && !$user->is_verify) {
                return false;
            }

            return true;
        });


        Gate::define('can-add-favoris', function (User $user) {
            $exist = Favoris::where('user_id', $user->id)->exists();

            if ($exist && !$user->is_verify) {
                return false;
            }

            return true;
        });


        Gate::define('manage-message', function (User $user, Message $message) {
            return $user->id == $message->user_from;
        });

        Gate::define('manage-message-update', function (User $user, Message $message) {
            return $user->id == $message->user_to;
        });


    }
}
