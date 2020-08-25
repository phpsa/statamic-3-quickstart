<h1>{{title}}</h1>

{{content}}

{{if withform }}


{{form:create handle="{withform|raw}" id="{withform|raw}_form" class="ajax_form"}}

    {{ if success }}
        <div class="bg-green-300 text-white p-2">
            {{ success }}
        </div>
    {{ else }}

        {{ if errors }}
            <div class="bg-red-300 text-white p-2">
                {{ errors }}
                    {{ value }}<br>
                {{ /errors }}
            </div>
        {{ /if }}


        {{ fields }}
            <div class="p-2">
                <label>{{ display }}</label>
                <div class="p-1">{{ field }}</div>
                {{ if error }}
                    <p class="text-red-500">{{ error }}</p>
                {{ /if }}
            </div>
        {{ /fields }}

        <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Submit</button>
    {{ /if }}

{{/form:create}}



{{ /if}}
