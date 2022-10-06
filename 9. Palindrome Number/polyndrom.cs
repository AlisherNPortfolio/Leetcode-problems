public class Solution {
    public bool IsPalindrome(int x) {
        if (x % 10 == 0 && x != 0) return false;

        int k = 0;
        while (x > k) {
            k = k * 10 + x % 10;
            x = x/10;
        }

        return k == x || x == k/10;
    }
}