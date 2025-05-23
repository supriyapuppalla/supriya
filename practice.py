def count_vowels(input_string):
    vowels = 'aeiouAEIOU'     # Including both lowercase & uppercase
    count = 0

    for char in input_string:
        if char in vowels:
            count += 1

    return count

# Taking input from user
text = input("Enter a string: ")

# Function call
vowel_count = count_vowels(text)

# Output
print(f"\nNumber of vowels in '{text}' is: {vowel_count}")
