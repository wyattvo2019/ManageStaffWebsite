# ManageStaffWebsite

## 1. Create laravel project 
```
composer create-project laravel/laravel server
```

## 2. Update evn to connect DB
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=manage-staff-website
DB_USERNAME=root
DB_PASSWORD=password
```

## 3. Create Model for DB
```
php artisan make:Model Team
php artisan make:Model Member
php artisan make:Model TeamMember
php artisan make:Model Configuration
php artisan make:Model Candidate
php artisan make:Model CandidateSkill
php artisan make:Model CandidateContact
php artisan make:Model Interview
php artisan make:Model Interviewer
php artisan make:Model InterviewerComment
```
Update for models. Example:
```
    protected $table = 'candidate';
    protected $fillable = ['id', 'del_flag', 'name', 'is_male', 'birthday', 'cv', 'is_passed', 'university_id', 'created_by', 'modified_by', 'created_at', 'updated_at'];
```

## 4. Create migrations
```
php artisan make:migration create_configuration_table --create=configuration
php artisan make:migration create_member_table --create=member
php artisan make:migration create_team_table --create=team
php artisan make:migration create_team_member_table --create=team_member
php artisan make:migration create_candidate_table --create=candidate
php artisan make:migration create_candidate_skill_table --create=candidate_skill
php artisan make:migration create_candidate_contact_table --create=candidate_contact
php artisan make:migration create_interview_table --create=interview
php artisan make:migration create_interviewer_table --create=interviewer
php artisan make:migration create_interviewer_comment_table --create=interviewer_comment
```
Update for migraion. Example: 
```
            $table->increments('id');
            $table->boolean('del_flag')->default(false);
            $table->string('value');
            $table->string('description')->nullable()->default('');
            $table->string('type');
            $table->integer('created_by')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->timestamps();
```

## 5. Run migrate
```
php artisan migrate
```

## 6. Create seeder
```
php artisan make:seeder ConfigurationTableSeeder
php artisan make:seeder MemberTableSeeder
php artisan make:seeder TeamTableSeeder
php artisan make:seeder TeamMemberTableSeeder
php artisan make:seeder CandidateTableSeeder
php artisan make:seeder CandidateSkillTableSeeder
php artisan make:seeder CandidateContactTableSeeder
php artisan make:seeder InterviewTableSeeder
php artisan make:seeder InterviewerTableSeeder
php artisan make:seeder InterviewerCommentTableSeeder
```
[1] Can apply for single seed:
```
php artisan db:seed --class=ConfigurationTableSeeder
php artisan db:seed --class=MemberTableSeeder
php artisan db:seed --class=TeamTableSeeder
php artisan db:seed --class=TeamMemberTableSeeder
php artisan db:seed --class=CandidateTableSeeder
php artisan db:seed --class=CandidateSkillTableSeeder
php artisan db:seed --class=
php artisan db:seed --class=InterviewTableSeeder
php artisan db:seed --class=InterviewerTableSeeder
php artisan db:seed --class=InterviewerCommentTableSeeder
```
[2] Or run all with: (Need to modify DatabaseSeeder.php)
```
php artisan migrate:fresh --seed
```

## 7. Create Controller
```
php artisan make:controller CandidateContactController --resource
php artisan make:controller CandidateController --resource 
php artisan make:controller CandidateSkillController --resource
php artisan make:controller ConfigurationController --resource
php artisan make:controller InterviewController --resource
php artisan make:controller InterviewerController --resource
php artisan make:controller MemberController --resource
php artisan make:controller TeamController --resource
php artisan make:controller TeamMemberController --resource


```

## 8. Create React App
```
npx create-react-app client
cd client
npm start
```

## 9. Install semantic, reactstrap
```
npm i semantic-ui-react --save
npm i bootstrap --save
npm i reactstrap react react-dom --save
```

## 10. Install semantic-ui-css
```
npm install semantic-ui-react semantic-ui-css --save
npm i node-sass --save
```

