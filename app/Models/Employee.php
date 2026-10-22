<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use ApiPlatform\Metadata\ApiResource;
/**
 * Class Employee
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property Carbon|null $hire_date
 * @property int|null $department_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Department $department
 */
#[ApiResource]
class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    /**
     * @var string
     */
    protected $connection = 'sqlite';

    protected $primaryKey = 'id';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'hire_date',
        'department_id',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'first_name' => 'string',
            'last_name' => 'string',
            'email' => 'string',
            'hire_date' => 'datetime',
            'department_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    /**
     * @return BelongsTo<Department, $this>
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
