<?php

use Illuminate\Database\Seeder;

class GeoLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->importCsvFile('geo_locations_dk.csv');
        $this->importCsvFile('geo_locations_se.csv');
    }

    protected function importCsvFile($file)
    {
        $contents = $this->getFileContents($file);
        $i = 0;
        while ($row = fgetcsv($contents, 0, ',')) {
            $i++;
            if ($i == 1) {
                continue;
            }

            \App\Models\GeoLocation::create([
                'geo_code' => $row[0],
                'zip_code' => $row[1],
                'city_name' => $row[2],
                'slug' => $row[3],
                'geo_lat' => $row[4],
                'geo_lon' => $row[5],
            ]);
        }
    }

    protected function getFileContents($path)
    {
        return fopen(
            base_path('database/samples/'.$path),
            'r'
        );
    }
}
