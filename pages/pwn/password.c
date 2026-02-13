#include <stdio.h>
#include <string.h>

int main() {
    char input[32];

    printf("Enter exam password: ");
    scanf("%31s", input);

    if (strcmp(input, "biuctf2026") == 0) {
        puts("FLAG{easy_password_found}");
    } else {
        puts("Access denied");
    }

    return 0;
}
