<?php

namespace TheRogg\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use TheRogg\Repositories\Politicians\PoliticianRepositoryInterface;

class FillPoliticianData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:fillPoliticians';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fills politician data from the GovTrack.us bulk raw data service.';

    /**
     * Repository for the Politician domain model.
     *
     * @var PoliticianRepositoryInterface
     */
    private $politicianRepo;

    /**
     * Create a new command instance.
     *
     * @param PoliticianRepositoryInterface $politicianRepo
     */
    public function __construct(PoliticianRepositoryInterface $politicianRepo)
    {
        parent::__construct();

        $this->politicianRepo = $politicianRepo;
    }

    public function handle()
    {
        $client = new Client();

        $response = $client->get('https://www.govtrack.us/api/v2/role?current=true&limit=600');
        $json     = json_decode($response->getBody())->objects;

        foreach ($json as $politicianJson)
        {
            $firstName  = $politicianJson->person->firstname;
            $middleName = $politicianJson->person->middlename;
            $lastName   = $politicianJson->person->lastname;

            if (empty($middleName))
                $name = $firstName . ' ' . $lastName;
            else
                $name = $firstName . ' ' . $middleName . ' ' . $lastName;

            $district      = $politicianJson->district;
            $party         = $politicianJson->party;
            $roleTypeLabel = $politicianJson->role_type_label;
            $state         = $politicianJson->state;
            $bioGuideId    = $politicianJson->person->bioguideid;
            $govTrackId    = $politicianJson->person->id;

            $politician = $this->politicianRepo->make($name, $state, $roleTypeLabel, $party, $district, $bioGuideId, $govTrackId);

            if ($politician->getName() == 'Bernard Sanders' || $politician->getName() == 'Ted Cruz' || $politician->getName() == 'Lindsey O. Graham' || $politician->getName() == 'Rand Paul' || $politician->getName() == 'Marco Rubio')
            {
                $politician->setIsPresidentialCandidate(true);
                $this->politicianRepo->save($politician);
            }
        }

        $this->info('Done.');
    }
}
