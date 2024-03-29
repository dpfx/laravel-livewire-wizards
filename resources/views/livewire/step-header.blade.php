@php
    $isStepValid = true;
    $isFailedStep = !$isStepValid;
    $stepIsGreaterOrEqualThan = $this->step >= $data['position'];
@endphp
<div class="w-1/3">
    <div class="relative mb-2">
        @if(!$loop->first)
            <div class="absolute" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                <div class="bg-gray-200 rounded flex-1">
                    <div
                        @class([
                            'rounded py-0.5',
                            'bg-green-300' => $stepIsGreaterOrEqualThan && !$isFailedStep,
                            'bg-red-300' => $isFailedStep,
                            'w-full' => $isFailedStep || $stepIsGreaterOrEqualThan,
                            'w-0' =>  !($isFailedStep || $stepIsGreaterOrEqualThan)
                        ])
                    ></div>
                </div>
            </div>
        @endif

        <div class="grid place-items-center">
            <div class="text-lg" wire:click="setStep({{ $data['position'] }})">
                @if ($stepIsGreaterOrEqualThan && !$isFailedStep)
                    <i class="fa-solid fa-circle text-green-300"></i>
                @else
                    <i class="fa-regular fa-circle"></i>
                @endif
            </div>
        </div>
    </div>

    <div @class([
        'text-xs',
        'text-center',
        'md:text-base',
        'underline' => $this->step === $data['position'],
        'font-black' => $this->step === $data['position'],
    ])>
        {{ $data['title'] }}
    </div>

</div>

@script
<script>
    $wire.on('icon-updated', (data) => {
        console.log(data);
    });
</script>
@endscript
